import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { AmplifySignInView } from '@/sections/auth/amplify';

// ----------------------------------------------------------------------

const metadata = { title: `Sign in | Amplify - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <AmplifySignInView />
    </>
  );
}
