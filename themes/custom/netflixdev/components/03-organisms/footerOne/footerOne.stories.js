import footerOne from './footerOne.twig';
import footerOneData from './footerOne.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Footer one' };

export const footerOneExp = () => footerOne(footerOneData);
