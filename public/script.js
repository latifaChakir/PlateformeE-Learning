class About extends React.Component {
    render() {
      return(
          React.createElement("h1", null, this.props.name),

        React.createElement("div", { className: "about",role:"eve"}));
    }}
  class Header extends React.Component {
    constructor() {
      super();
      this.state = {contentStyle: {left: '0px',top: '0px' } };
      this.mouseOver = this.mouseOver.bind(this);}
    mouseOver(e) {
      this.setState({contentStyle: {left: e.pageX / 100 + 'px',top: e.pageY / 100 + 'px' } });}
    render() {
      return(
        React.createElement("div", { className: "header", onMouseMove: this.mouseOver },
        React.createElement("div", { id: "particles-js" }),
        React.createElement("div", { className: "content-wrapper" },
        React.createElement("div", { className: "content", style: this.state.contentStyle },
        React.createElement("h5", null, this.props.f),
        React.createElement("h3", null, this.props.name),
        React.createElement("a", null, this.props.a),


      ))));
      }}
  class App extends React.Component {
    render() {
      return(
        React.createElement("div", null,
        React.createElement(Header, {
          name: "Best Education From Your Home",
          f: "Best Online Courses",
          a: "Learn More",

         }),
                      React.createElement(About, null)));}}
                      ReactDOM.render(React.createElement(App, null),document.getElementById('app'));
                      Hammer(document.querySelector('.header')).on('swipeleft', () => {
                      document.querySelector('.about').style.left = '0';
                      });
                      Hammer(document.querySelector('.about')).on('swiperight', () => {
                      document.querySelector('.about').style.left = '100vw';
                      });
               particlesJS("particles-js",
                  {
                      "particles": {
                      "number": {
                      "value": 600,
                      "density": {
                      "enable": true,
                      "value_area": 3156.5905665290907 } },
                      "color": {
                      "value": "#F4CE0B" },
                      "shape": {
                      "type": "circle",
                      "stroke": {
                      "width": 6,
                      "color": "#1A81F3" },
                      "polygon": {
                      "nb_sides": 4 },
                      "image": {
                      "src": "img/github.svg",
                      "width": 100,
                      "height": 100 } },
                      "opacity": {
                      "value": 1,
                      "random": false,
                      "anim": {
                      "enable": false,
                      "speed": 1,
                      "opacity_min": 0.1,
                      "sync": false } },
                      "size": {
                      "value": 1,
                      "random": true,
                      "anim": {
                      "enable": false,
                      "speed": 40,
                      "size_min": 0.1,
                      "sync": false } },
                      "line_linked": {
                      "enable": true,
                      "distance": 150,
                      "color": "#e6faff",
                      "opacity": 0.4,
                      "width": 1 },
                      "move": {
                      "enable": true,
                      "speed": 6,
                      "direction": "none",
                      "random": false,
                      "straight": false,
                      "out_mode": "out",
                      "bounce": false,
                      "attract": {
                      "enable": false,
                      "rotateX": 600,
                      "rotateY": 1200 } } },
                      "interactivity": {
                      "detect_on": "canvas",
                      "events": {
                      "onhover": {
                      "enable": true,
                      "mode": "repulse" },
                      "onclick": {
                      "enable": true,
                      "mode": "push" },
                      "resize": true },
                      "modes": {
                      "grab": {
                      "distance": 400,
                      "line_linked": {
                      "opacity": 1 } },
                      "bubble": {
                      "distance": 400,
                      "size": 40,
                      "duration": 2,
                      "opacity": 8,
                      "speed": 3 },
                      "repulse": {
                      "distance": 200,
                      "duration": 0.4 },
                      "push": {
                      "particles_nb": 4 },
                      "remove": {
                      "particles_nb": 2 } } },
                      "retina_detect": true });
          var count_particles, stats, update;
              stats = new Stats();
              stats.setMode(0);
              stats.domElement.style.position = 'absolute';
              stats.domElement.style.left = '0px';
              stats.domElement.style.top = '0px';
              document.body.appendChild(stats.domElement);
              count_particles = document.querySelector('.js-count-particles');
                  update = function () {
                      stats.begin();
                      stats.end();
                          if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                              count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;}
              requestAnimationFrame(update);};
              requestAnimationFrame(update);;
