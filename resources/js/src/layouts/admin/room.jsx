import React, { useState } from 'react';
import {
  Box,
  Grid,
  TextField,
  MenuItem,
  FormControl,
  FormControlLabel,
  Radio,
  RadioGroup,
  FormLabel,
  Button,
  Container,
  Divider,
} from '@mui/material';
import { DataGridCustom } from '../../components/data-grid/school-year-table';
import { _mock } from '@/_mock';
import CollapsibleCard from '../../components/collapsible-card/CollapsibleCard';
import { CONFIG } from '@/config-global';
import { RoomTransferList } from '../../components/transfer-list/room';

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
  const [roomType, setRoomType] = useState('Not-Air Conditioned');
  const [scheduleConflict, setScheduleConflict] = useState('Include');
  return (
    <Container maxWidth={false}>
      {/* Form Section */}
      <CollapsibleCard title="Room Form">
        <Box sx={{ width: '100%', padding: 2 }}>
          <Grid container spacing={2}>
            {/* Code and Description Inputs */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="code" label="Code" variant="outlined" fullWidth />
              </FormControl>
            </Grid>
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="description" label="Description" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Campus and Building Dropdowns */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="campus" select label="Campus" variant="outlined" fullWidth>
                  <MenuItem value="Campus 1">Campus 1</MenuItem>
                  <MenuItem value="Campus 2">Campus 2</MenuItem>
                </TextField>
              </FormControl>
            </Grid>
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="building" select label="Building" variant="outlined" fullWidth>
                  <MenuItem value="Building 1">Building 1</MenuItem>
                  <MenuItem value="Building 2">Building 2</MenuItem>
                </TextField>
              </FormControl>
            </Grid>

            {/* Floor Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="floor" label="Floor" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            {/* Capacity Input */}
            <Grid item xs={6}>
              <FormControl fullWidth variant="outlined">
                <TextField id="capacity" label="Capacity" variant="outlined" fullWidth />
              </FormControl>
            </Grid>

            <Divider sx={{ width: '100%', marginY: 2 }} />

            {/* Room Type Radio Buttons */}
            <Grid item xs={6}>
              <FormControl component="fieldset" fullWidth>
                <FormLabel component="legend">Room Type</FormLabel>
                <RadioGroup row value={roomType} onChange={(e) => setRoomType(e.target.value)}>
                  <FormControlLabel value="Not-Air Conditioned" control={<Radio />} label="Not-Air Conditioned" />
                  <FormControlLabel value="Air Conditioned" control={<Radio />} label="Air Conditioned" />
                </RadioGroup>
              </FormControl>
            </Grid>

            {/* Schedule Conflict Radio Buttons */}
            <Grid item xs={6}>
              <FormControl component="fieldset" fullWidth>
                <FormLabel component="legend">Schedule Conflict</FormLabel>
                <RadioGroup row value={scheduleConflict} onChange={(e) => setScheduleConflict(e.target.value)}>
                  <FormControlLabel value="Include" control={<Radio />} label="Include" />
                  <FormControlLabel value="Exclude" control={<Radio />} label="Exclude" />
                </RadioGroup>
              </FormControl>
            </Grid>

            <Divider sx={{ width: '100%', marginY: 2 }} />

            <Box sx={{ mt: 4 }}>
              <FormControl component="fieldset" fullWidth>
                <FormLabel component="legend">Course Assignment</FormLabel>
                <RoomTransferList />
              </FormControl>
            </Box>
          </Grid>

          <Divider sx={{ width: '100%', marginY: 2 }} />

          {/* Action Buttons */}
          <Box sx={{ display: 'flex', justifyContent: 'flex-end', gap: 1, marginTop: 3 }}>
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
      <CollapsibleCard title="Room" defaultOpen={true}>
        <Box sx={CONFIG.tableBoxStyle}>
          <DataGridCustom data={_dataGrid} />
        </Box>
      </CollapsibleCard>
    </Container>
  );
}
