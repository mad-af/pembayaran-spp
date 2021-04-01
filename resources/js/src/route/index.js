
import { pages } from '../pages/pages'

export const route = [
  {
    name: 'home',
    path: '/dashboard',
    component: pages.pageHome
  },
  {
    name: 'class',
    path: '/class',
    component: pages.pageClass
  },
  {
    name: 'officer',
    path: '/officer',
    component: pages.pageOfficer
  },
  {
    name: 'student',
    path: '/student',
    component: pages.pageStudent
  },
  {
    name: 'student',
    path: '/student/:id',
    component: pages.pageDetailStudent
  },
  {
    name: 'spp',
    path: '/spp',
    component: pages.pageSPP
  }
]
