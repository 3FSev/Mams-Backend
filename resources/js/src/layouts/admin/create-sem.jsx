import { Box, Grid, TextField, Button, Container, FormControl, MenuItem } from '@mui/material';
import { DataGridCustom } from '../../components/data-grid/school-year-table';
import { _mock } from '@/_mock';
import CollapsibleCard from '../../components/collapsible-card/CollapsibleCard';
import { CONFIG } from '@/config-global';

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
      <CollapsibleCard title="School Year Semester Form">
        <Box sx={{ width: '100%', padding: 2 }}>
          <Grid container spacing={2}>
            {/* School Year Dropdown */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField
                  id="school-year"
                  select
                  labelId="school-year-label"
                  label="School Year"
                  variant="outlined"
                  fullWidth
                >
                  {/* Replace these MenuItem components with your actual school year options */}
                  <MenuItem value="2023-2024">2023-2024</MenuItem>
                  <MenuItem value="2024-2025">2024-2025</MenuItem>
                </TextField>
              </FormControl>
            </Grid>

            {/* Semester Dropdown */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="semester" select labelId="semester-label" label="Semester" variant="outlined" fullWidth>
                  {/* Replace these MenuItem components with your actual semester options */}
                  <MenuItem value="Fall">Fall</MenuItem>
                  <MenuItem value="Spring">Spring</MenuItem>
                </TextField>
              </FormControl>
            </Grid>
          </Grid>

          {/* Disabled Input Field */}
          <Box sx={{ marginTop: 2 }}>
            <FormControl fullWidth variant="outlined">
              <TextField
                id="code"
                label="Code"
                variant="outlined"
                fullWidth
                disabled
                value=""
                sx={{ backgroundColor: '#f5f5f5' }}
              />
            </FormControl>
          </Box>
        </Box>

        <Box sx={{ display: 'flex', justifyContent: 'flex-end', gap: 1, marginTop: 3 }}>
          <Button variant="contained" color="primary">
            Save
          </Button>
          <Button variant="outlined" color="secondary">
            Cancel
          </Button>
        </Box>
      </CollapsibleCard>

      {/* Data Table Section */}
      <CollapsibleCard title="School Year Semester" defaultOpen={true}>
        <Box sx={CONFIG.tableBoxStyle}>
          <DataGridCustom data={_dataGrid} />
        </Box>
      </CollapsibleCard>
    </Container>
  );
}
