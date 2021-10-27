import link from './links.twig';
import linkData from './links.yml';

// defination

export default { title: 'Molecules/menus/footer-links' };

export const Links = () => link(linkData);
