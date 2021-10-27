import heading from './headings/_heading.twig';
import headingData from './headings/headings.yml';
import headingDataDopetope from './headings/dopetope-headings.yml';

import paragraph from './text/01-paragraph.twig';
import paragraphData from './text/dopetope-paragraph.yml';

import blockquote from './text/02-blockquote.twig';
import blockquoteData from './text/blockquote.yml';
import inlineElements from './text/03-inline-elements.twig';
import pre from './text/05-pre.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Text' };

// Loop over items in headingData to show each one in the example below.
const headings = headingData.map((d) => heading(d)).join('');

const dopetopeheadings = headingDataDopetope.map((d) => heading(d)).join('');

const dopetopeparagraph = paragraphData.map((d) => paragraph(d)).join('');

export const headingsExamples = () => headings;

export const dopetopeHeadings = () => dopetopeheadings;

export const dopetopeParagraph = () => dopetopeparagraph;

export const blockquoteExample = () => blockquote(blockquoteData);

export const preformatted = () => pre();

export const random = () => inlineElements();
