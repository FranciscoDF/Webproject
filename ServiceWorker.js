
//*************************************************************************//
//*************************************************************************//
//Dans ces deux variables on stock le nom de notre cache + l'assets qui contient les fichiers à garder en cache.
const NomDuCache= 'ma_sauvegarde';
const assets = [
    '/',
    '/index.php',
    '/manifest.json',
    '/js/app.js',
    '/view/template.php',
    '/view/template.css',
    '/view/ViewUser.php',
    '/view/ViewUserAdd.php',
    '/view/ViewUserAddValid.php',
    '/view/ViewUserAddValid.js',
    '/view/ViewUserDelete.php',
    '/view/ViewUserUpdate.php',
    '/view/ViewUserUpdateValid.php',
    '/view/ViewUser.js',
    '/view/ViewUserAddValid.js',
    '/view/cesi.png',
    '/view/contract.png',
    '/model/user.php',
    '/model/userManager.php',
    '/view/View.php',
    '/view/ViewHome.php',
    '/view/ViewIndustries.php',
    '/view/ViewIndustries.js',
    '/view/ViewIndustriesAdd.php',
    '/view/ViewIndustriesAddValid.php',
    '/view/ViewIndustriesAddValid.js',
    '/view/ViewIndustriesDelete.php',
    '/view/ViewIndustriesUpdate.php',
    '/view/ViewIndustriesUpdateValid.php',
    '/view/ViewInternship.js',
    '/view/ViewInternship.php',
    '/view/ViewInternshipAdd.php',
    '/view/ViewInternshipAddValid.php',
    '/view/ViewInternshipAddValid.js',
    '/view/ViewInternshipDelete.php',
    '/view/ViewInternshipUpdate.php',
    '/view/ViewInternshipUpdateValid.php',
    '/view/ViewInternshipUpdateValid.js',
    '/view/ViewInternshipDeleteValid.php',
    '/view/ViewInternshipDeleteValid.js',
    '/Controller/ControllerUser.php',
    '/Controller/Router.php',
    '/Controller/ControllerInternship.php',
    '/Controller/ControllerIndustries.php',
    '/Controller/ControllerHome.php',
    '/model/ability.php',
    '/model/abilityManager.php',
    '/model/application.php',
    '/model/applicationManager.php',
    '/model/center.php',
    '/model/centerManager.php',
    '/model/user.php',
    '/model/userManager.php',
    '/model/evaluation.php',
    '/model/evaluationManager.php',
    '/model/industries.php',
    '/model/industriesManager.php',
    '/model/internship.php',
    '/model/internshipManager.php',
    '/model/model.php',
    '/model/permission.php',
    '/model/permissionManager.php',
    '/model/promo.php',
    '/model/promoManager.php',
    '/model/role.php',
    '/model/roleManager.php',
    '/model/sector.php',
    '/model/sectorManager.php',
    '/model/step.php',
    '/model/stepManager.php',
];

//*************************************************************************//
//*************************************************************************//
//Installation du service worker
self.addEventListener('install', evt => {

     evt.waitUntil(  caches.open(NomDuCache).then(cache => {
        console.log('caching shell assets');
        cache.addAll(assets);
        })
    )
  
});

//*************************************************************************//
//*************************************************************************//
//Activation du Service Worker
self.addEventListener('activate', evt => {
    console.log('service Worker has been activated');
});

//*************************************************************************//
//*************************************************************************//
//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.open('ma_sauvegarde').then(function(cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function(response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  });
