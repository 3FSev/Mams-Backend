import { Box, Grid, TextField, Button, Container, FormControl, MenuItem } from '@mui/material';
import { DataGridCustom } from '../../components/data-grid/school-year-table';
import { _mock } from '@/_mock';
import CollapsibleCard from '../../components/collapsible-card/CollapsibleCard';
import { CONFIG } from '@/config-global';

const _dataGrid = [...Array(20)].map((_, index) => {
  return {
    id: _mock.id(index),
    name: _mock.fullName(index),
    age: _mock.number.age(index),
    lastName: _mock.lastName(index),
    rating: _mock.number.rating(index),
    firstName: _mock.firstName(index),
  };
});

export default function Main() {
  return (
    <Container maxWidth={false}>
      {/* Form Section */}
      <CollapsibleCard title="Campus Form">
        <Box sx={{ width: '100%', padding: 2 }}>
          <Grid container spacing={2}>
            {/* Campus Code Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="campus-code" label="Campus Code" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Campus Name Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="campus-name" label="Campus Name" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Address Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="address" label="Address" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Phone Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="phone" label="Phone" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Director Dropdown */}
            <Grid item xs={12}>
              <FormControl fullWidth variant="outlined">
                <TextField id="director" select label="Director" variant="outlined" fullWidth>
                  {/* Replace these MenuItem components with your actual director options */}
                  <MenuItem value="Director 1">Director 1</MenuItem>
                  <MenuItem value="Director 2">Director 2</MenuItem>
                </TextField>
              </FormControl>
            </Grid>
          </Grid>
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
      <CollapsibleCard title="Campus" defaultOpen={true}>
        <Box sx={CONFIG.tableBoxStyle}>
          <DataGridCustom data={_dataGrid} />
        </Box>
      </CollapsibleCard>
    </Container>
  );
}
