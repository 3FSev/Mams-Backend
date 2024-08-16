import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { JwtSignInView } from '@/sections/auth/jwt';

// ----------------------------------------------------------------------

const metadata = { title: `Sign in | Jwt - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <JwtSignInView />
    </>
  );
}
