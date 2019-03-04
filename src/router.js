import Vue from 'vue';
import Router from 'vue-router';
import HomeComponent from './views/Home.vue';
import NewsComponent from './views/News.vue';
import CatechesisComponent from './views/Catechesis.vue';
import GalleryComponent from './views/Gallery.vue';
import CoursesComponent from './views/Courses.vue';
import TerapyComponent from './views/Terapy.vue';
import ContactComponent from './views/Contact.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'Home',
      component: HomeComponent,
    },
    {
      path: '/Aktualności',
      name: 'Aktualności',
      component: NewsComponent,
    },
    {
      path: '/Katecheza',
      name: 'Katecheza',
      component: CatechesisComponent,
    },
    {
      path: '/GALERIA',
      name: 'Galeria',
      component: GalleryComponent,
    },
    {
      path: '/Szkolenia',
      name: 'Szkolenia',
      component: CoursesComponent,
    },
    {
      path: '/Terapia',
      name: 'Terapia',
      component: TerapyComponent,
    },
    {
      path: '/Kontakt',
      name: 'Kontakt',
      component: ContactComponent,
    },
  ],
});
