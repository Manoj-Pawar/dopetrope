import date from './date.twig';
import dateData from './date.yml';

export default { title: 'Atoms/date' };

export const Date = () => date(dateData);
