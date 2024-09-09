import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import Main from '../../../layouts/admin/school-year';

// ----------------------------------------------------------------------

const metadata = { title: `School Year | Admin - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>
      <Main />
    </>
  );
}
