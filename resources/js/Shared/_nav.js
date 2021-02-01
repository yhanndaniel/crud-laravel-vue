export default [
  {
    _name: 'CSidebarNav',
    _children: [
      {
        _name: 'CSidebarNavItem',
        name: 'Dashboard',
        to: '/',
        icon: 'cil-speedometer',
        badge: {
          color: 'primary',
          text: 'NEW'
        }
      },      
      {
        _name: 'CSidebarNavItem',
        name: 'Charts',
        to: '/customers',
        icon: 'cil-chart-pie'
      },      
    ]
  }
]