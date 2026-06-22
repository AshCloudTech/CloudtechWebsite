const fs = require('fs');
const path = require('path');

function walk(dir, files = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(full, files);
    else if (entry.name === 'script.js') files.push(full);
  }
  return files;
}

const root = path.join(__dirname, '..', 'public', 'assets');
const files = walk(root).filter((f) => !f.includes('site-nav'));

const patterns = [
  /\/\/ Mobile navigation toggle\r?\nconst navToggle[\s\S]*?}\r?\n}\r?\n\r?\n/,
  /\/\/ Mobile Nav Toggle\r?\nconst toggle[\s\S]*?}\r?\n\r?\n/,
  /const navToggle = document\.querySelector\(['"]\.nav-toggle['"]\);\r?\nconst mainNav = document\.querySelector\(['"]\.main-nav['"]\);\r?\n\r?\nif \(navToggle && mainNav\) \{\r?\n  navToggle\.addEventListener\(['"]click['"], \(\) => \{\r?\n    mainNav\.classList\.toggle\(['"]open['"]\);\r?\n  \}\);\r?\n\}\r?\n\r?\n/,
  /const navToggle = document\.querySelector\("\.nav-toggle"\);\r?\nconst mainNav = document\.querySelector\("\.main-nav"\);\r?\n\r?\nif \(navToggle && mainNav\) \{\r?\n    navToggle\.addEventListener\("click", \(\) => \{\r?\n        mainNav\.classList\.toggle\("open"\);\r?\n    \}\);\r?\n\}\r?\n\r?\n/,
];

let changed = 0;
for (const file of files) {
  let content = fs.readFileSync(file, 'utf8');
  const original = content;
  for (const pattern of patterns) {
    content = content.replace(pattern, '');
  }
  if (content !== original) {
    fs.writeFileSync(file, content);
    changed++;
    console.log('updated', path.relative(root, file));
  }
}

console.log(`Done. Updated ${changed} files.`);
