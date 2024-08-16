import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { AmplifySignUpView } from '@/sections/auth/amplify';

// ----------------------------------------------------------------------

const metadata = { title: `Sign up | Amplify - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <AmplifySignUpView />
    </>
  );
}
