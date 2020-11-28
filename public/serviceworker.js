var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/images/favicon.png',
    '/css/slick.css',
    '/css/animate.css',
    '/css/nice-select.css',
    '/css/jquery.nice-number.min.css',
    '/css/magnific-popup.css',
    '/css/bootstrap.min.css',
    '/css/font-awesome.min.css',
    '/css/default.css',
    '/css/styles.css',
    '/js/vendor/modernizr-3.6.0.min.js',
    '/js/vendor/jquery-1.12.4.min.js',
    '/js/bootstrap.min.js',
    '/js/slick.min.js',
    '/js/jquery.magnific-popup.min.js',
    '/js/waypoints.min.js',
    '/js/jquery.counterup.min.js',
    '/js/jquery.nice-select.min.js',
    '/js/jquery.nice-number.min.js',
    '/js/jquery.countdown.min.js',
    '/js/validator.min.js',
    '/js/ajax-contact.js',
    '/js/main.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-128x128.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});