import fonticon from './awesome_font_icon.twig';

import iconData from './icon.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Images/Font_icon' };

export const Icon = () => fonticon(iconData);
