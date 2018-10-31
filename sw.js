const cacheName = 'iweb31';
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        `/`,
        `/index.php`,
        `/assets/css/sal.min.css`,
        `/assets/js/jquery-1.11.3.min.js`,
        `/assets/js/bootstrap.min.js`,
        `/assets/js/comlink.global.js`,
        `/assets/js/messagechanneladapter.global.js`,
        `/assets/js/pwacompat.min.js`
      ]).then(() => self.skipWaiting());
    })
  );
});
self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName).then(cache => {
      return cache.match(event.request).then(res => {
        return res || fetch(event.request)
      });
    })
  );
});
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName).then( cache => {
      return cache.match(event.request).then( response => {
        return response || fetch(event.request).then( rosponse => {
          cache.put(event.request, response.clone());
          return response;
        });
      });
    })
  );
});