const fs = require('fs');
const path = 'resources/views/welcome.blade.php';
let content = fs.readFileSync(path, 'utf8');

content = content.replace(
  /src="\{\{ asset\('assets\/images\/home\/([^']+)\.webp'\) \}\}"/g,
  (match, name) => {
    if (name.endsWith('-644')) return match;
    return `src="{{ asset('assets/images/home/${name}-644.webp') }}" srcset="{{ asset('assets/images/home/${name}-644.webp') }} 644w, {{ asset('assets/images/home/${name}.webp') }} 672w" sizes="322px"`;
  }
);

fs.writeFileSync(path, content);
console.log('Updated welcome.blade.php with responsive srcset');
