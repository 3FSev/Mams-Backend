import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { AmplifyUpdatePasswordView } from '@/sections/auth/amplify';

// ----------------------------------------------------------------------

const metadata = { title: `Update password | Amplify - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <AmplifyUpdatePasswordView />
    </>
  );
}
