function toggleNavigation(element) {
  var nav = document.getElementById('main-navigation');
  toggleClass(nav, 'active');
  toggleClass(element, 'active');
}

function toggleClass(element, toggleClassName) {
  if(element.className.indexOf(toggleClassName) > -1) {
    element.className = element.className.replace(toggleClassName, '');
  } else {
    element.className = element.className + ' ' + toggleClassName;
  };
};