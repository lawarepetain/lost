
const items = [
    {
      id: 1,
      title: 'Portefeuille',
      location: { lat: 6.13, lng: 1.22 }, 
      description: 'Portefeuille trouvé le 12/03/2023.',
    },
    {
      id: 2,
      title: 'Téléphone',
      location: { lat: 9.55, lng: 0.81 }, 
      description: 'Téléphone trouvé le 15/03/2023.',
    },
   
  ];
  
  function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
      center: { lat: 8.49, lng: 1.18 }, 
      zoom: 7,
    });
  
    items.forEach((item) => {
      const marker = new google.maps.Marker({
        position: item.location,
        map: map,
        title: item.title,
      });
  
      marker.addListener('click', () => {
        displayItemDetails(item);
      });
    });
  }
  
  function displayItemDetails(item) {
    const itemDetails = document.getElementById('item-details');
    itemDetails.innerHTML = `
      <h2>${item.title}</h2>
      <p>${item.description}</p>
      <p>Latitude: ${item.location.lat}</p>
      <p>Longitude: ${item.location.lng}</p>
    `;
  }
  
  
  function initGoogleMaps() {
    const script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key=API_Google_Maps&callback=initMap`; 
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);
  }
  
  initGoogleMaps();
  function googleMapsError() {
    console.error('Erreur de chargement de Google Maps.');
    document.getElementById('map').textContent = 'Impossible de charger Google Maps.';
  }
  
  