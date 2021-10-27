// Buttons Stories
import footerArticle from './footer_article.twig';

import footerDataArticle from './footer_article.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/FooterArtical' };

export const FooterArticle = () => footerArticle(footerDataArticle);
