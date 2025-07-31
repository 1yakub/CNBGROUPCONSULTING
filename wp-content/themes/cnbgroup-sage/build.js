#!/usr/bin/env node

const fs = require('fs');
const { execSync } = require('child_process');

// Create temporary index.html for Vite's HTML mode
const tempHtml = `<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sage Build</title>
</head>
<body>
  <script type="module" src="./resources/scripts/app.js"></script>
  <script type="module" src="./resources/scripts/editor.js"></script>
</body>
</html>`;

console.log('Creating temporary index.html for Vite...');
fs.writeFileSync('index.html', tempHtml);

try {
  console.log('Building with Vite...');
  execSync('npx vite build', { stdio: 'inherit' });
  
  console.log('Build successful!');
} catch (error) {
  console.error('Build failed:', error.message);
  process.exit(1);
} finally {
  // Always clean up
  if (fs.existsSync('index.html')) {
    console.log('Cleaning up temporary index.html...');
    fs.unlinkSync('index.html');
  }
}

console.log('✅ Sage build complete!');
