import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { SupabaseSignInView } from '@/sections/auth/supabase';

// ----------------------------------------------------------------------

const metadata = { title: `Sign in | Supabase - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <SupabaseSignInView />
    </>
  );
}
