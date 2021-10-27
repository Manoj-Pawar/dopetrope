import card from './card.twig';
import portfolioCardData from './portifolio_card.yml';
import blogCardData from './blog_card.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Cards' };

export const portfolioCard = () => card(portfolioCardData);

export const blogCard = () => card(blogCardData);
