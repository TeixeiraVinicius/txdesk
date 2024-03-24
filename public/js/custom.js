 
    (function() {
      const container = document.getElementById("globe");
      const canvas = container.getElementsByTagName("canvas")[0];

      const globeRadius = 100;
      const globeWidth = 4098 / 2;
      const globeHeight = 1968 / 2;

      function convertFlatCoordsToSphereCoords(x, y) {
        let latitude = ((x - globeWidth) / globeWidth) * -180;
        let longitude = ((y - globeHeight) / globeHeight) * -90;
        latitude = (latitude * Math.PI) / 180;
        longitude = (longitude * Math.PI) / 180;
        const radius = Math.cos(longitude) * globeRadius;

        return {
          x: Math.cos(latitude) * radius,
          y: Math.sin(longitude) * globeRadius,
          z: Math.sin(latitude) * radius
        };
      }

      function makeMagic(points) {
        const {
          width,
          height
        } = container.getBoundingClientRect();

        // 1. Setup scene
        const scene = new THREE.Scene();
        // 2. Setup camera
        const camera = new THREE.PerspectiveCamera(45, width / height);
        // 3. Setup renderer
        const renderer = new THREE.WebGLRenderer({
          canvas,
          antialias: true
        });
        renderer.setSize(width, height);
        // 4. Add points to canvas
        // - Single geometry to contain all points.
        const mergedGeometry = new THREE.Geometry();
        // - Material that the dots will be made of.
        const pointGeometry = new THREE.SphereGeometry(0.5, 1, 1);
        const pointMaterial = new THREE.MeshBasicMaterial({
          color: "#989db5",
        });

        for (let point of points) {
          const {
            x,
            y,
            z
          } = convertFlatCoordsToSphereCoords(
            point.x,
            point.y,
            width,
            height
          );

          if (x && y && z) {
            pointGeometry.translate(x, y, z);
            mergedGeometry.merge(pointGeometry);
            pointGeometry.translate(-x, -y, -z);
          }
        }

        const globeShape = new THREE.Mesh(mergedGeometry, pointMaterial);
        scene.add(globeShape);

        container.classList.add("peekaboo");

        // Setup orbital controls
        camera.orbitControls = new THREE.OrbitControls(camera, canvas);
        camera.orbitControls.enableKeys = false;
        camera.orbitControls.enablePan = false;
        camera.orbitControls.enableZoom = false;
        camera.orbitControls.enableDamping = false;
        camera.orbitControls.enableRotate = true;
        camera.orbitControls.autoRotate = true;
        camera.position.z = -265;

        function animate() {
          // orbitControls.autoRotate is enabled so orbitControls.update
          // must be called inside animation loop.
          camera.orbitControls.update();
          requestAnimationFrame(animate);
          renderer.render(scene, camera);
        }
        animate();
      }

      function hasWebGL() {
        const gl =
          canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
        if (gl && gl instanceof WebGLRenderingContext) {
          return true;
        } else {
          return false;
        }
      }

      function init() {
        if (hasWebGL()) {
          window
          window.fetch("https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard-pro/assets/js/points.json")
            .then(response => response.json())
            .then(data => {
              makeMagic(data.points);
            });
        }
      }
      init();
    })();
  
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

   
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
      searchable: false,
      fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: true
    });

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  
    if (document.getElementById('choices-gender')) {
      var gender = document.getElementById('choices-gender');
      const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
      var language = document.getElementById('choices-language');
      const example = new Choices(language);
    }

    if (document.getElementById('choices-skills')) {
      var skills = document.getElementById('choices-skills');
      const example = new Choices(skills, {
        delimiter: ',',
        editItems: true,
        maxItemCount: 5,
        removeItemButton: true,
        addItems: true
      });
    }

    if (document.getElementById('choices-year')) {
      var year = document.getElementById('choices-year');
      setTimeout(function() {
        const example = new Choices(year);
      }, 1);

      for (y = 1900; y <= 2020; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 2020) {
          optn.selected = true;
        }

        year.options.add(optn);
      }
    }

    if (document.getElementById('choices-day')) {
      var day = document.getElementById('choices-day');
      setTimeout(function() {
        const example = new Choices(day);
      }, 1);


      for (y = 1; y <= 31; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 1) {
          optn.selected = true;
        }

        day.options.add(optn);
      }

    }

    if (document.getElementById('choices-month')) {
      var month = document.getElementById('choices-month');
      setTimeout(function() {
        const example = new Choices(month);
      }, 1);

      var d = new Date();
      var monthArray = new Array();
      monthArray[0] = "January";
      monthArray[1] = "February";
      monthArray[2] = "March";
      monthArray[3] = "April";
      monthArray[4] = "May";
      monthArray[5] = "June";
      monthArray[6] = "July";
      monthArray[7] = "August";
      monthArray[8] = "September";
      monthArray[9] = "October";
      monthArray[10] = "November";
      monthArray[11] = "December";
      for (m = 0; m <= 11; m++) {
        var optn = document.createElement("OPTION");
        optn.text = monthArray[m];
        // server side month start from one
        optn.value = (m + 1);
        // if june selected
        if (m == 1) {
          optn.selected = true;
        }
        month.options.add(optn);
      }
    }

    function visible() {
      var elem = document.getElementById('profileVisibility');
      if (elem) {
        if (elem.innerHTML == "Switch to visible") {
          elem.innerHTML = "Switch to invisible"
        } else {
          elem.innerHTML = "Switch to visible"
        }
      }
    }

    var openFile = function(event) {
      var input = event.target;

      // Instantiate FileReader
      var reader = new FileReader();
      reader.onload = function() {
        imageFile = reader.result;

        document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
      };
      reader.readAsDataURL(input.files[0]);
    };
