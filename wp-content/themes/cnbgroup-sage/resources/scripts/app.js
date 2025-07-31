// Import styles
import '../styles/app.css';

// Simple DOM ready function
function domReady(fn) {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', fn);
  } else {
    fn();
  }
}

/**
 * Application entrypoint
 */
domReady(async () => {
  // Your app initialization code here
  console.log('Sage theme with Vite loaded!');
});

/**
 * Vite HMR
 * @see {@link https://vitejs.dev/guide/api-hmr}
 */
if (import.meta.hot) {
  import.meta.hot.accept();
}
