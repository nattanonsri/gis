<style>
    #map {
        width: 100%;
        height: 100vh;

    }
</style>


<div id="map"></div>
<div id="controls"></div>


<script>
    // สร้างแผนที่ที่กำหนดตำแหน่งเริ่มต้น
    var map = L.map('map').setView([13.7563, 100.5018], 10); // Bangkok, Thailand

    // เพิ่ม tile layer ให้แผนที่
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // ตำแหน่ง marker ทั้ง 10
    var markerPositions = [
        [13.7563, 100.5018],
        [13.7463, 100.5018],
        [13.7363, 100.5018],
        [13.7263, 100.5018],
        [13.7163, 100.5018],
        [13.7063, 100.5018],
        [13.6963, 100.5018],
        [13.6863, 100.5018],
        [13.6763, 100.5018],
        [13.6663, 100.5018]
    ];


    // รูปภาพสำหรับ marker ทั้ง 10
    var markerImages = [
        'path/to/image1.jpg',
        'path/to/image2.jpg',
        'path/to/image3.jpg',
        'path/to/image4.jpg',
        'path/to/image5.jpg',
        'path/to/image6.jpg',
        'path/to/image7.jpg',
        'path/to/image8.jpg',
        'path/to/image9.jpg',
        'path/to/image10.jpg'
    ];

    // สีสำหรับ marker ทั้ง 10
    var markerColors = [
        'red',
        'blue',
        'green',
        'orange',
        'purple',
        'yellow',
        'cyan',
        'magenta',
        'lime',
        'pink'
    ];

    // สร้าง marker และเก็บไว้ใน array
    var markers = [];
  
    var controls = document.getElementById('controls');
    for (var i = 0; i < markerPositions.length; i++) {
        (function (index) {
            // สร้าง icon สำหรับ marker ที่มีสีไม่ซ้ำกัน
            var customIcon = L.divIcon({
                className: 'custom-div-icon',
                html: `<div style="background-color:${markerColors[index]}; width:20px; height:20px; border-radius:30%;"></div>`, //<img src="pin.png" alt="รูปมาร์เกอร์" style="width:20px;height:20px;">
                iconSize: [20, 20],
                iconAnchor: [10, 10]
            });

            var marker = L.marker(markerPositions[index], { icon: customIcon }).bindPopup(`
                    <h3>Marker ${index + 1}</h3>
                    <h5></h5>
                    <p>Marker at ${markerPositions[index]}</p>
                    <img src="${markerImages[index]}" alt="Image for Marker ${index + 1}" style="width:100%;height:auto;">
                `);
            markers.push(marker);
            marker.addTo(map);

            // สร้างปุ่มสวิตช์สำหรับ marker แต่ละตัว
            var switchContainer = document.createElement('div');
            switchContainer.innerHTML = `
                    <label class="switch">
                        <input type="checkbox" id="toggleMarker${index}" checked>
                        <span class="slider"></span>
                    </label>
                    <label for="toggleMarker${index}">Marker ${index + 1}</label>
                `;
            controls.appendChild(switchContainer);

            // เพิ่ม event listener ให้ปุ่มสวิตช์
            document.getElementById(`toggleMarker${index}`).addEventListener('change', function () {
                if (this.checked) {
                    map.addLayer(marker);
                } else {
                    map.removeLayer(marker);
                }
            });
        })(i);
    }
</script>