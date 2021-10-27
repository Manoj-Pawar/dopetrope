// Buttons Stories
import button from './button.twig';

import buttonTwigData from './button.yml';
import buttonPrimaryData from './button-primary.yml';
import buttonSecondryData from './button-secondry.yml';
import blogButtonPrimaryData from './blog-button-primary.yml';
import blogButtonSecondryData from './blog-button-secondry.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Button' };

export const twig = () => button(buttonTwigData);

export const twigPrimary = () => button(buttonPrimaryData);

export const twigSecondry = () => button(buttonSecondryData);

export const twigBlogPrimary = () => button(blogButtonPrimaryData);

export const twigBlogSecondry = () => button(blogButtonSecondryData);
