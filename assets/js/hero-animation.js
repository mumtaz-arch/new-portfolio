import * as THREE from 'https://cdn.skypack.dev/three@0.136.0';
import { FontLoader } from 'https://cdn.skypack.dev/three@0.136.0/examples/jsm/loaders/FontLoader.js';
import { TextGeometry } from 'https://cdn.skypack.dev/three@0.136.0/examples/jsm/geometries/TextGeometry.js';

// Configuration
const container = document.getElementById('hero-canvas');
// Make text larger and white
const textToDisplay = "MUMTAZ";
const fontUrl = 'https://threejs.org/examples/fonts/helvetiker_bold.typeface.json';

// Scene Setup
const scene = new THREE.Scene();
// Optional: Slight fog for depth if needed, but linear style is usually crisp or subtle gradient
// scene.fog = new THREE.FogExp2(0x0f0f0f, 0.002);

// Camera
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = 25; // Create more distance for background feeling
camera.position.x = 0;
camera.position.y = 0;

// Renderer
const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight); // Full screen
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
container.appendChild(renderer.domElement);

// Lighting
const ambientLight = new THREE.AmbientLight(0xffffff, 0.3);
scene.add(ambientLight);

// White/Blueish lights for Linear feel
const pointLight = new THREE.PointLight(0xFFFFFF, 0.8, 100);
pointLight.position.set(20, 20, 20);
scene.add(pointLight);

const pointLight2 = new THREE.PointLight(0x5E6AD2, 0.5, 100);
pointLight2.position.set(-20, -20, 20);
scene.add(pointLight2);

// Mouse Interaction
let mouseX = 0;
let mouseY = 0;
let targetX = 0;
let targetY = 0;
const windowHalfX = window.innerWidth / 2;
const windowHalfY = window.innerHeight / 2;

document.addEventListener('mousemove', (event) => {
    mouseX = (event.clientX - windowHalfX) * 0.02; // Reduced sensitivity for background
    mouseY = (event.clientY - windowHalfY) * 0.02;
});

// Text Mesh Group
const group = new THREE.Group();
scene.add(group);

// Load Font and Create Text
const loader = new FontLoader();
loader.load(fontUrl, function (font) {
    const geometry = new TextGeometry(textToDisplay, {
        font: font,
        size: 7, // Larger size for more impact
        height: 0.8,
        curveSegments: 12,
        bevelEnabled: true,
        bevelThickness: 0.15,
        bevelSize: 0.08,
        bevelOffset: 0,
        bevelSegments: 5
    });

    geometry.computeBoundingBox();
    const xMid = - 0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);
    geometry.translate(xMid, 0, 0);

    // White Wireframe Material
    const material = new THREE.MeshStandardMaterial({
        color: 0xFFFFFF,
        emissive: 0x222222,
        metalness: 0.8,
        roughness: 0.2,
        wireframe: true,
        opacity: 0.15, // Low opacity for background
        transparent: true
    });

    const textMesh = new THREE.Mesh(geometry, material);
    group.add(textMesh);
});

// Animation Loop
function animate() {
    requestAnimationFrame(animate);

    targetX = mouseX * 0.01;
    targetY = mouseY * 0.01;

    if (group.children.length > 0) {
        // Slow smooth background rotation
        group.rotation.x += 0.02 * (targetY - group.rotation.x);
        group.rotation.y += 0.02 * (targetX - group.rotation.y);

        // Constant slow spin
        group.rotation.y += 0.001;
        group.rotation.x = Math.sin(Date.now() * 0.0005) * 0.1; // Gentle wave
    }

    renderer.render(scene, camera);
}

animate();

// Handle Resize
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});
