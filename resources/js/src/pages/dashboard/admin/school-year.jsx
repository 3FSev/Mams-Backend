import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { SchoolYearData } from '../../../components/data-grid/view';

// ----------------------------------------------------------------------

const metadata = { title: `Blank | Dashboard - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <SchoolYearData />
    </>
  );
}
