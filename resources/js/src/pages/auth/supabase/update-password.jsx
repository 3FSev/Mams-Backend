import { Helmet } from 'react-helmet-async';

import { CONFIG } from '@/config-global';

import { SupabaseUpdatePasswordView } from '@/sections/auth/supabase';

// ----------------------------------------------------------------------

const metadata = { title: `Update password | Supabase - ${CONFIG.site.name}` };

export default function Page() {
  return (
    <>
      <Helmet>
        <title> {metadata.title}</title>
      </Helmet>

      <SupabaseUpdatePasswordView />
    </>
  );
}
