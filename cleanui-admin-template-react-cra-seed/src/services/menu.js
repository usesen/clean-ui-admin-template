export async function getLeftMenuData() {
  return [
    {
      title: 'Home Page',
      key: 'dashboardAlpha',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-home',
    },
    {
      divider: true,
    },
    {
      title: 'Ticket',
      key: 'ticket',
      url: '/ticket',
      icon: 'icmn icmn-ticket',
    },
    {
      title: 'Repair Ticket',
      key: 'ticketrepairticket',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-ticket',
    },
    {
      title: 'Customer',
      key: 'customers',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-team',
    },
    {
      title: 'Vendors',
      key: 'vendor',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-team',
    },
    {
      title: 'Locations',
      key: 'location',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'Contacts',
      key: 'contact',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'Contracts',
      key: 'contract',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'Models',
      key: 'models',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'products',
      key: 'products',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'SLA',
      key: 'sla',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },
    {
      title: 'Users',
      key: 'users',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-man',
    },
    {
      title: 'Admin',
      key: 'admin',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-user',
    },

  ]
}
export async function getTopMenuData() {
  return [
    {
      title: 'Settings',
      key: 'settings',
      icon: 'icmn icmn-cog utils__spin-delayed--pseudo-selector',
    },
    {
      title: 'Docs',
      key: 'documentation',
      url: 'https://docs.cleanuitemplate.com',
      target: '_blank',
      icon: 'icmn icmn-books',
    },
    {
      title: 'Dashboard Alpha',
      key: 'dashboardAlpha',
      url: '/dashboard/alpha',
      icon: 'icmn icmn-home',
    },
  ]
}
