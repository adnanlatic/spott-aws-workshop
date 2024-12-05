export const routes = [
  { path: '/', redirect: '/dashboard' },
  {
    path: '/',
    component: () => import('@/layouts/default.vue'),
    children: [
      {
        path: 'dashboard',
        component: () => import('@/pages/dashboard.vue'),
      },
      {
        path: 'upload-file',
        component: () => import('@/pages/upload-file.vue'),
      },
      {
        path: 'new-post',
        component: () => import('@/pages/new-post.vue'),
      },
      {
        path: '/posts/:id/edit',
        name: 'EditPost',
        component: () => import('@/pages/edit-post.vue'),
      },
      {
        path: 'new-email',
        component: () => import('@/pages/new-email.vue'),
      },
    ],
  },
  {
    path: '/',
    component: () => import('@/layouts/blank.vue'),
    children: [
      {
        path: '/:pathMatch(.*)*',
        component: () => import('@/pages/[...error].vue'),
      },
    ],
  },
]
