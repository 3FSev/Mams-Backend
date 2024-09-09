import { Box, Grid, TextField, Button, Container } from '@mui/material';
import { DataGridCustom } from '../../components/data-grid/school-year-table';
import { _mock } from '@/_mock';
import CollapsibleCard from '../../components/collapsible-card/CollapsibleCard';
import { CONFIG } from '@/config-global';
// ----------------------------------------------------------------------

const _dataGrid = [...Array(20)].map((_, index) => {
  const status = (index % 2 && 'online') || (index % 3 && 'alway') || (index % 4 && 'busy') || 'offline';

  return {
    id: _mock.id(index),
    status,
    email: _mock.email(index),
    name: _mock.fullName(index),
    age: _mock.number.age(index),
    lastLogin: _mock.time(index),
    isAdmin: _mock.boolean(index),
    lastName: _mock.lastName(index),
    rating: _mock.number.rating(index),
    firstName: _mock.firstName(index),
    performance: _mock.number.percent(index),
  };
});

export default function Main() {
  return (
    <Container maxWidth={false}>
      {/* Form Section */}
      <CollapsibleCard title="Faculty Type Form">
        <Box sx={{ width: '100%', padding: 2 }}>
          <Grid container spacing={2}>
            {/* Faculty Type Description */}
            <Grid item xs={12}>
              <TextField label="Faculty Type Description" variant="outlined" fullWidth />
            </Grid>

            {/* Max Units (Regular), Max Units (Part-time), Max Units (Temporary Load) */}
            <Grid item xs={4}>
              <TextField label="Max Units (Regular)" variant="outlined" fullWidth type="number" />
            </Grid>
            <Grid item xs={4}>
              <TextField label="Max Units (Part-time)" variant="outlined" fullWidth type="number" />
            </Grid>
            <Grid item xs={4}>
              <TextField label="Max Units (Temporary Load)" variant="outlined" fullWidth type="number" />
            </Grid>
          </Grid>

          <Box
            sx={{
              display: 'flex',
              justifyContent: 'flex-end',
              gap: 1,
              marginTop: 3,
            }}
          >
            <Button variant="contained" color="primary">
              Save
            </Button>
            <Button variant="outlined" color="secondary">
              Cancel
            </Button>
          </Box>
        </Box>
      </CollapsibleCard>

      {/* Data Table Section */}
      <CollapsibleCard title="Faculty Type" defaultOpen={true}>
        <Box sx={CONFIG.tableBoxStyle}>
          <DataGridCustom data={_dataGrid} />
        </Box>
      </CollapsibleCard>
    </Container>
  );
}
