<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2017 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
    'Class:Announcement' => 'Announcement',
    'Class:Announcement+' => 'Announcement on the portal',
    'Class:Announcement/Attribute:org_id' => 'Organization',
    'Class:Announcement/Attribute:org_id+' => '',
    'Class:Announcement/Attribute:org_name' => 'Organization',
    'Class:Announcement/Attribute:org_name+' => '',
    'Class:Announcement/Attribute:title' => 'Title',
    'Class:Announcement/Attribute:title+' => 'Announcement title',
    'Class:Announcement/Attribute:description' => 'Text',
    'Class:Announcement/Attribute:description+' => 'Announcement text',
    'Class:Announcement/Attribute:start_date' => 'Start date',
    'Class:Announcement/Attribute:start_date+' => 'When the announcement appears',
    'Class:Announcement/Attribute:end_date' => 'End date',
    'Class:Announcement/Attribute:end_date+' => 'When the announcement disappears',
    'Class:Announcement/Attribute:status' => 'Status',
    'Class:Announcement/Attribute:status+' => 'Announcement status',
    'Class:Announcement/Attribute:status/Value:active' => 'Active',
    'Class:Announcement/Attribute:status/Value:active+' => '',
    'Class:Announcement/Attribute:status/Value:inactive' => 'Inactive',
    'Class:Announcement/Attribute:status/Value:inactive+' => '',
    'Class:Announcement/Attribute:message_type' => 'Type',
    'Class:Announcement/Attribute:message_type+' => 'Determines the appearance of the announcement',
    'Class:Announcement/Attribute:message_type/Value:message_info' => 'Info',
    'Class:Announcement/Attribute:message_type/Value:message_info+' => '',
    'Class:Announcement/Attribute:message_type/Value:message_ok' => 'Success',
    'Class:Announcement/Attribute:message_type/Value:message_ok+' => '',
    'Class:Announcement/Attribute:message_type/Value:message_warning' => 'Warning',
    'Class:Announcement/Attribute:message_type/Value:message_warning+' => '',
    'Class:Announcement/Attribute:message_type/Value:message_error' => 'Danger',
    'Class:Announcement/Attribute:message_type/Value:message_error+' => '',
    'Class:Announcement/Attribute:customers_list' => 'Organizations',
    'Class:Announcement/Attribute:customers_list+' => 'Customer organizations whose users will see this announcement',

    'Class:lnkAnnouncementToCustomer' => 'Link Announcement/Customer',
    'Class:lnkAnnouncementToCustomer+' => 'Link Announcement/Customer',
    'Class:lnkAnnouncementToCustomer/Attribute:announcement_id' => 'Announcement',
    'Class:lnkAnnouncementToCustomer/Attribute:announcement_id+' => '',
    'Class:lnkAnnouncementToCustomer/Attribute:announcement_name' => 'Announcement',
    'Class:lnkAnnouncementToCustomer/Attribute:announcement_name+' => '',
    'Class:lnkAnnouncementToCustomer/Attribute:customer_org_id' => 'Customer',
    'Class:lnkAnnouncementToCustomer/Attribute:customer_org_id+' => '',
    'Class:lnkAnnouncementToCustomer/Attribute:customer_org_name' => 'Customer',
    'Class:lnkAnnouncementToCustomer/Attribute:customer_org_name+' => '',

    'Menu:NewAnnouncement' => 'New announcement',
    'Menu:ActiveAnnouncements' => 'Active announcements',
    'Menu:ActiveAnnouncements+' => 'Active announcements (showing now)',
    'Menu:AllAnnouncements' => 'All announcements',
    'Menu:AllAnnouncements+' => 'All announcements',

    'Brick:Portal:Announcements:Title' => 'Announcements',
    'Brick:Portal:Announcements:Description' => 'Announcements on the portal',
    'Brick:Portal:Announcements:Tab:Active' => 'Active',
    'Brick:Portal:Announcements:Tab:Inactive' => 'Inactive'
));
