/**
 * Global Page Navigation Sync Component
 * Synchronizes active visual state highlights with on-screen content positions
 */

const targetSections = document.querySelectorAll('section[id]');
const navigationLinks = document.querySelectorAll('.main-nav-link');

function synchronizeActiveNavigationState() {
  let activeSectionId = null;

  // Track layout baseline intersection matrix
  targetSections.forEach(section => {
    const boundaryMetrics = section.getBoundingClientRect();
    // 120px offset matches fixed structural header clearance zones
    if (boundaryMetrics.top <= 120 && boundaryMetrics.bottom >= 120) {
      activeSectionId = section.id;
    }
  });

  // Toggle utility modifier tokens on navigational elements
  navigationLinks.forEach(linkElement => {
    const routingHref = linkElement.getAttribute('href') || '';
    const sectionAnchorId = routingHref.startsWith('#') ? routingHref.substring(1) : null;
    
    if (sectionAnchorId && sectionAnchorId === activeSectionId) {
      linkElement.classList.add('is-active');
    } else {
      linkElement.classList.remove('is-active');
    }
  });
}

// Bind viewport performance tracking hooks
window.addEventListener('scroll', synchronizeActiveNavigationState);
window.addEventListener('load', synchronizeActiveNavigationState);