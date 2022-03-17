require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 // On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
} else {
  document.documentElement.classList.remove('dark')
}

document.getElementById('theme-switch').addEventListener('click', function() {
  if(localStorage.theme == 'dark') {
    document.documentElement.classList.remove('dark')
    localStorage.theme = 'light';
  } else {
    document.documentElement.classList.add('dark')
    localStorage.theme = 'dark';
  }
});

const hljs = require('highlight.js')
hljs.configure({ languages: ['ruby', 'erb', 'bash', 'javascript'] })

document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre').forEach((block) => {
    hljs.highlightElement(block)
  })
})
