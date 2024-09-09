// React and hooks
import React, { useState, useCallback } from 'react';

// MUI components
import {
  Box,
  Grid,
  TextField,
  Button,
  Typography,
  FormControlLabel,
  Checkbox,
  Container,
  Divider,
} from '@mui/material';
import { DatePicker } from '@mui/x-date-pickers/DatePicker'; // Ensure you have installed @mui/x-date-pickers for DatePicker

// Custom components
import CollapsibleCard from '../../components/collapsible-card/CollapsibleCard';
import { UploadAvatar } from '../../components/upload';
import { DataGridCustom } from '../../components/data-grid/school-year-table';

// Utility functions and config
import { fData } from '@/utils/format-number';
import { CONFIG } from '@/config-global';
import { _mock } from '@/_mock';

const Main = () => {
  const renderLabel = (text) => (
    <Typography component="span">
      {text}
      <Typography component="span" color="error">
        *
      </Typography>
    </Typography>
  );

  const handleDropAvatar = useCallback((acceptedFiles) => {
    const newFile = acceptedFiles[0];
    setAvatarUrl(newFile);
  }, []);
  const [avatarUrl, setAvatarUrl] = useState(null);

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

  return (
    <Container maxWidth={false}>
      {/* User Creation Form Section */}
      <CollapsibleCard title="User Registration Form">
        <Box sx={{ width: '100%', padding: 2 }}>
          <Grid container spacing={2}>
            {/* Profile Picture */}
            <Grid item xs={12} sm={14}>
              <Typography variant="body1" align="center">
                Profile Picture
              </Typography>
              <UploadAvatar
                value={avatarUrl}
                onDrop={handleDropAvatar}
                validator={(fileData) => {
                  if (fileData.size > 1000000) {
                    return { code: 'file-too-large', message: `File is larger than ${fData(1000000)}` };
                  }
                  return null;
                }}
                helperText={
                  <Typography
                    variant="caption"
                    sx={{
                      mt: 3,
                      mx: 'auto',
                      display: 'block',
                      textAlign: 'center',
                      color: 'text.disabled',
                    }}
                  >
                    Allowed *.jpeg, *.jpg, *.png, *.gif
                    <br /> max size of {fData(3145728)}
                  </Typography>
                }
              />
            </Grid>
            <Divider sx={{ width: '100%', marginY: 2 }} />
            {/* Name Inputs */}
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('First Name')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label="Middle Name" variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Last Name')} variant="outlined" fullWidth />
            </Grid>

            {/* Date of Birth and Place of Birth */}
            <Grid item xs={12} sm={2}>
              <DatePicker
                label={renderLabel('Date of Birth')}
                renderInput={(params) => <TextField {...params} variant="outlined" fullWidth />}
              />
            </Grid>
            <Grid item xs={12} sm={6}>
              <TextField label={renderLabel('Place of Birth')} variant="outlined" fullWidth />
            </Grid>

            {/* Gender, Civil Status, Nationality */}
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Gender')} select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Grid item xs={12} sm={6}>
              <TextField label={renderLabel('Civil Status')} select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Grid item xs={12} sm={6}>
              <TextField label={renderLabel('Nationality')} variant="outlined" fullWidth />
            </Grid>

            {/* Present Address Header */}
            <Divider sx={{ width: '100%', marginY: 2 }} />
            <Grid item xs={12}>
              <Typography variant="h6" align="center">
                PRESENT ADDRESS
              </Typography>
            </Grid>

            {/* Present Address Fields */}
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Region')} select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Province')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Municipality')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={9}>
              <TextField label={renderLabel('Address')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={3}>
              <TextField label="Zip Code" variant="outlined" fullWidth />
            </Grid>

            {/* Permanent Address Header */}
            <Divider sx={{ width: '100%', marginY: 2 }} />
            <Grid item xs={12}>
              <Typography variant="h6" align="center">
                PERMANENT ADDRESS
              </Typography>
            </Grid>

            {/* Same as Residential Address Checkbox */}
            <Grid item xs={12}>
              <FormControlLabel control={<Checkbox />} label="Same as Residential Address" />
            </Grid>

            {/* Permanent Address Fields */}
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Region')} select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Province')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Municipality')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={9}>
              <TextField label={renderLabel('Address')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={3}>
              <TextField label="Zip Code" variant="outlined" fullWidth />
            </Grid>
            <Divider sx={{ width: '100%', marginY: 2 }} />
            {/* Contact Information */}
            <Grid item xs={12} sm={4}>
              <TextField label={renderLabel('Contact No.')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label="Email Address" variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label="Religion" variant="outlined" fullWidth />
            </Grid>

            {/* Physical Information */}
            <Grid item xs={12} sm={4}>
              <TextField label="Height" variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label="Weight" variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={4}>
              <TextField label="Blood Type" select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Divider sx={{ width: '100%', marginY: 2 }} />
            {/* Account Information */}
            <Grid item xs={12}>
              <TextField label={renderLabel('Position')} select variant="outlined" fullWidth>
                {/* Add MenuItem options here */}
              </TextField>
            </Grid>
            <Grid item xs={12}>
              <TextField label={renderLabel('Username')} variant="outlined" fullWidth />
            </Grid>
            <Grid item xs={12} sm={6}>
              <TextField label={renderLabel('Password')} variant="outlined" fullWidth type="password" />
            </Grid>
            <Grid item xs={12} sm={6}>
              <TextField label={renderLabel('Confirm Password')} variant="outlined" fullWidth type="password" />
            </Grid>
          </Grid>
          <Divider sx={{ width: '100%', marginY: 2 }} />
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
      <CollapsibleCard title="User Profile" defaultOpen={true}>
        <Box sx={CONFIG.tableBoxStyle}>
          <DataGridCustom data={_dataGrid} />
        </Box>
      </CollapsibleCard>
    </Container>
  );
};

export default Main;
