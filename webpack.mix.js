let mix = require('laravel-mix');

mix.scripts([
   'resources/assets/js/polyfill.min.js',
   'resources/assets/js/vue.js',
   'resources/assets/js/bootstrap-vue.min.js',
   'resources/assets/js/axios.js',
   'resources/assets/js/vuelidate.min.js',
   'resources/assets/js/validators.min.js',
   'resources/assets/js/app.js',
   'resources/assets/js/sweetalert2.js',
   ],'public/js/app.js').styles([
      'resources/assets/css/bootstrap.min.css',
      'resources/assets/css/bootstrap-vue.min.css',
   ],'public/css/app.css')