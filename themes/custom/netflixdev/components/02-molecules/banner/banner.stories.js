import banner from './banner.twig';

import bannerData from './banner.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Banner' };

export const Banner = () => banner(bannerData);
