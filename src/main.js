// Webpack Imports
import Button from 'bootstrap/js/dist/button';
import Carousel from 'bootstrap/js/dist/carousel';
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';
import Modal from 'bootstrap/js/dist/modal';
import Offcanvas from 'bootstrap/js/dist/offcanvas';
import Tab from 'bootstrap/js/dist/tab';
import Tooltip from 'bootstrap/js/dist/tooltip';

// Optional Imports
// import 'bootstrap/js/dist/alert';
// import 'bootstrap/js/dist/popover';
// import 'bootstrap/js/dist/scrollspy';
// import 'bootstrap/js/dist/toast';

// Custom Imports

// Set up globally accessible functions, objects and variables here:
const bootstrap = {
	Button,
	Carousel,
	Collapse,
	Dropdown,
	Modal,
	Offcanvas,
	Tab,
	Tooltip
};

window.bootstrap = bootstrap;

