module.exports = {
  host: '0.0.0.0', // Allow access from mobile / LAN
  php: "C:\\AppServ\\php7\\php.exe",
  open: "index.php",
  // Reverting to simpler config since injectBody/navigateFallback didn't fix the query param drop
};
