<?PHP // $Id: forum.php,v 1.81.2.3 2006/02/06 09:59:35 moodler Exp $ 
      // forum.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005020101)



$string['addanewdiscussion'] = 'Add a new discussion topic';
$string['addanewquestion'] = 'Add a new question';
$string['addanewtopic'] = 'Add a new topic';
$string['advancedsearch'] = 'Advanced search';
$string['allforums'] = 'All forums';
$string['allowchoice'] = 'Allow everyone to choose';
$string['allowdiscussions'] = 'Can a $a post to this forum?';
$string['allowratings'] = 'Allow posts to be rated?';
$string['allowsdiscussions'] = 'This forum allows each person to start one discussion topic.';
$string['allsubscribe'] = 'Subscribe to all forums';
$string['allunsubscribe'] = 'Unsubscribe from all forums';
$string['anyfile'] = 'Any file';
$string['attachment'] = 'Attachment';
$string['blockafter'] = 'Post threshold for blocking';
$string['blockperiod'] = 'Time period for blocking';
$string['blockperioddisabled'] = 'Don\'t block';
$string['bynameondate'] = 'by $a->name - $a->date';
$string['configcleanreadtime'] = 'The hour of the day to clean old posts from the \'read\' table.';
$string['configdisplaymode'] = 'The default display mode for discussions if one isn\'t set.';
$string['configenablerssfeeds'] = 'This switch will enable the possibility of RSS feeds for all forums.  You will still need to turn feeds on manually in the settings for each forum.';
$string['configlongpost'] = 'Any post over this length (in characters not including HTML) is considered long. Posts displayed on the site front page, social format course pages, or user profiles are shortened to a natural break somewhere between the forum_shortpost and forum_longpost values.';
$string['configmanydiscussions'] = 'Maximum number of discussions shown in a forum per page';
$string['configmaxbytes'] = 'Default maximum size for all forum attachments on the site (subject to course limits and other local settings)';
$string['configoldpostdays'] = 'Number of days old any post is considered read.';
$string['configreplytouser'] = 'When a forum post is mailed out, should it contain the user\'s email address so that recipients can reply personally rather than via the forum? Even if set to \'Yes\' users can choose in their profile to keep their email address secret.';
$string['configshortpost'] = 'Any post under this length (in characters not including HTML) is considered short (see below).';
$string['configtrackreadposts'] = 'Set to \'yes\' if you want to track read/unread for each user.';
$string['configusermarksread'] = 'If \'yes\', the user must manually mark a post as read. If \'no\', when the post is viewed it is marked as read.';
$string['couldnotadd'] = 'Could not add your post due to an unknown error';
$string['couldnotdeleteratings'] = 'Sorry, that cannot be deleted as people have already rated it';
$string['couldnotdeletereplies'] = 'Sorry, that cannot be deleted as people have already responded to it';
$string['couldnotupdate'] = 'Could not update your post due to an unknown error';
$string['delete'] = 'Delete';
$string['deleteddiscussion'] = 'The discussion topic has been deleted';
$string['deletedpost'] = 'The post has been deleted';
$string['deletedposts'] = 'Those posts have been deleted';
$string['deletesure'] = 'Are you sure you want to delete this post?';
$string['deletesureplural'] = 'Are you sure you want to delete this post and all replies? ($a posts)';
$string['digestmailheader'] = 'This is your daily digest of new posts from the $a->sitename forums. To change your forum email preferences, go to $a->userprefs.';
$string['digestmailprefs'] = 'your user profile';
$string['digestmailsubject'] = '$a: forum digest';
$string['digestsentusers'] = 'Email digests successfully sent to $a users.';
$string['disallowsubscribe'] = 'Subscriptions not allowed';
$string['disallowsubscribeteacher'] = 'Subscriptions not allowed (except for teachers)';
$string['discussion'] = 'Discussion';
$string['discussionmoved'] = 'This discussion has been moved to \'$a\'.';
$string['discussionname'] = 'Discussion name';
$string['discussions'] = 'Discussions';
$string['discussionsstartedby'] = 'Discussions started by $a';
$string['discussionsstartedbyrecent'] = 'Discussions recently started by $a';
$string['discussthistopic'] = 'Discuss this topic';
$string['displayend'] = 'Display end';
$string['displayperiod'] = 'Display Period';
$string['displaystart'] = 'Display start';
$string['eachuserforum'] = 'Each person posts one discussion';
$string['edit'] = 'Edit';
$string['editedby'] = 'Edited by $a->name -  $a->date';
$string['editing'] = 'Editing';
$string['emptymessage'] = 'Something was wrong with your post.  Perhaps you left it blank, or the attachment was too big.  Your changes have NOT been saved.';
$string['everyonecanchoose'] = 'Everyone can choose to be subscribed';
$string['everyoneissubscribed'] = 'Everyone is subscribed to this forum';
$string['existingsubscribers'] = 'Existing subscribers';
$string['forcesubscribe'] = 'Force everyone to be subscribed';
$string['forcesubscribeq'] = 'Force everyone to be subscribed?';
$string['forum'] = 'Forum';
$string['forumintro'] = 'Forum introduction';
$string['forumname'] = 'Forum name';
$string['forumposts'] = 'Forum posts';
$string['forums'] = 'Forums';
$string['forumblockingalmosttoomanyposts'] = 'You are approaching the posting threshold. You have posted $a->numposts times in the last $a->blockperiod and the limit is $a->blockafter posts.';
$string['forumbodyhidden'] = 'This post cannot be viewed by you, probably because you have not posted in the discussion yet.';
$string['forumauthorhidden'] = 'Author (hidden)';
$string['forumsubjecthidden'] = 'Subject (hidden)';
$string['forumtype'] = 'Forum type';
$string['generalforum'] = 'Standard forum for general use';
$string['generalforums'] = 'General forums';
$string['inforum'] = 'in $a';
$string['intronews'] = 'General news and announcements';
$string['introsocial'] = 'An open forum for chatting about anything you want to';
$string['introteacher'] = 'A forum for teacher-only notes and discussion';
$string['lastpost'] = 'Last post';
$string['learningforums'] = 'Learning forums';
$string['mailnow'] = 'Mail now';
$string['markalldread'] = 'Mark all posts in this discussion read.';
$string['markallread'] = 'Mark all posts in this forum read.';
$string['markread'] = 'Mark read';
$string['markreadbutton'] = 'Mark<br />read';
$string['markunread'] = 'Mark unread';
$string['markunreadbutton'] = 'Mark<br />unread';
$string['maxattachmentsize'] = 'Maximum attachment size';
$string['maxtimehaspassed'] = 'Sorry, but the maximum time for editing this post ($a) has passed!';
$string['message'] = 'Message';
$string['missingsearchterms'] = 'The following search terms occur only in the HTML markup of this message:';
$string['modeflatnewestfirst'] = 'Display replies flat, with newest first';
$string['modeflatoldestfirst'] = 'Display replies flat, with oldest first';
$string['modenested'] = 'Display replies in nested form';
$string['modethreaded'] = 'Display replies in threaded form';
$string['modulename'] = 'Forum';
$string['modulenameplural'] = 'Forums';
$string['more'] = 'more';
$string['movethisdiscussionto'] = 'Move this discussion to ... ';
$string['namenews'] = 'News forum';
$string['namesocial'] = 'Social forum';
$string['nameteacher'] = 'Teacher forum';
$string['newforumposts'] = 'New forum posts';
$string['nodiscussions'] = 'There are no discussion topics yet in this forum';
$string['noguestpost'] = 'Sorry, guests are not allowed to post.';
$string['noguestsubscribe'] = 'Sorry, guests are not allowed to subscribe to receive forum postings by email.';
$string['noguesttracking'] = 'Sorry, guests are not allowed to set tracking options.';
$string['nomorepostscontaining'] = 'No more posts containing \'$a\' were found';
$string['nonews'] = 'No news has been posted yet';
$string['noposts'] = 'No posts';
$string['nopostscontaining'] = 'No posts containing \'$a\' were found';
$string['noquestions'] = 'There are no questions yet in this forum';
$string['nosubscribers'] = 'There are no subscribers yet for this forum';
$string['nothingnew'] = 'Nothing new for $a';
$string['notingroup'] = 'Sorry, but you need to be part of a group to see this forum.';
$string['notrackforum'] = 'Don\'t track unread messages';
$string['nownotsubscribed'] = '$a->name will NOT receive copies of \'$a->forum\' by email.';
$string['nownottracking'] = '$a->name is no longer tracking \'$a->forum\'.';
$string['nowallsubscribed'] = 'All forums in $a are subscribed.';
$string['nowallunsubscribed'] = 'All forums in $a are not subscribed.';
$string['nowsubscribed'] = '$a->name will receive copies of \'$a->forum\' by email.';
$string['nowtracking'] = '$a->name is now tracking \'$a->forum\'.';
$string['numposts'] = '$a posts';
$string['olderdiscussions'] = 'Older discussions';
$string['oldertopics'] = 'Older topics';
$string['openmode0'] = 'No discussions, no replies';
$string['openmode1'] = 'No discussions, but replies are allowed';
$string['openmode2'] = 'Discussions and replies are allowed';
$string['overviewnumpostssince'] = 'posts since last login';
$string['overviewnumunread'] = 'total unread';
$string['parent'] = 'Show parent';
$string['parentofthispost'] = 'Parent of this post';
$string['postadded'] = '<p>Your post was successfully added.</p>
<p>You have $a to edit it if you want to make any changes.</p>';
$string['postincontext'] = 'See this post in context';
$string['postmailinfo'] = 'This is a copy of a message posted on the $a website.

To add your reply via the website, click on this link:';
$string['postmailnow'] = '<p>This post will be mailed out immediately to all forum subscribers.</p>';
$string['postrating1'] = 'Mostly Separate Knowing';
$string['postrating2'] = 'Separate and Connected';
$string['postrating3'] = 'Mostly Connected Knowing';
$string['posts'] = 'Posts';
$string['posttoforum'] = 'Post to forum';
$string['postupdated'] = 'Your post was updated';
$string['potentialsubscribers'] = 'Potential subscribers';
$string['processingdigest'] = 'Processing email digest for user $a';
$string['processingpost'] = 'Processing post $a';
$string['prune'] = 'Split';
$string['prunedpost'] = 'A new discussion has been created from that post';
$string['pruneheading'] = 'Split the discussion and move this post to a new discussion';
$string['qandaforum'] = 'Q and A forum';
$string['qandanotify'] = 'This is a Question and Answer forum. In order to see other responses to these Questions, you must first post your Answer';
$string['cannotviewpostyet'] = 'You cannot read other students questions in this discussion yet because you haven\'t posted';
$string['rate'] = 'Rate';
$string['rating'] = 'Rating';
$string['ratingeveryone'] = 'Everyone can rate posts';
$string['ratingno'] = 'No ratings';
$string['ratingonlyteachers'] = 'Only $a can rate posts';
$string['ratingpublic'] = '$a can see everyone\'s ratings';
$string['ratingpublicnot'] = '$a can only see their own ratings';
$string['ratings'] = 'Ratings';
$string['ratingssaved'] = 'Ratings saved';
$string['ratingsuse'] = 'Use ratings';
$string['ratingtime'] = 'Restrict ratings to posts with dates in this range:';
$string['re'] = 'Re:';
$string['readtherest'] = 'Read the rest of this topic';
$string['replies'] = 'Replies';
$string['repliesmany'] = '$a replies so far';
$string['repliesone'] = '$a reply so far';
$string['reply'] = 'Reply';
$string['replyforum'] = 'Reply to forum';
$string['rsssubscriberssdiscussions'] = 'Display the RSS feed for \'$a\' discussions';
$string['rsssubscriberssposts'] = 'Display the RSS feed for \'$a\' posts';
$string['search'] = 'Search';
$string['searchdatefrom'] = 'Posts must be newer than this';
$string['searchdateto'] = 'Posts must be older than this';
$string['searchforumintro'] = 'Please enter search terms into one or more of the following fields:';
$string['searchforums'] = 'Search forums';
$string['searchfullwords'] = 'These words should appear as whole words';
$string['searchnotwords'] = 'These words should NOT be included';
$string['searchphrase'] = 'This exact phrase must appear in the post';
$string['searchsubject'] = 'These words should be in the subject';
$string['searchuser'] = 'This name should match the author';
$string['searchuserid'] = 'The Moodle ID of the author';
$string['searchwords'] = 'These words can appear anywhere in the post';
$string['searcholderposts'] = 'Search older posts...';
$string['searchresults'] = 'Search results';
$string['searchwhichforums'] = 'Choose which forums to search';
$string['seeallposts'] = 'See all posts made by this user';
$string['sendinratings'] = 'Send in my latest ratings';
$string['showsubscribers'] = 'Show/edit current subscribers';
$string['singleforum'] = 'A single simple discussion';
$string['startedby'] = 'Started by';
$string['subject'] = 'Subject';
$string['subscribe'] = 'Subscribe to this forum';
$string['subscribeall'] = 'Subscribe everyone to this forum';
$string['subscribed'] = 'Subscribed';
$string['subscribenone'] = 'Unsubscribe everyone from this forum';
$string['subscribers'] = 'Subscribers';
$string['subscribersto'] = 'Subscribers to \'$a\'';
$string['subscribestart'] = 'Send me email copies of posts to this forum';
$string['subscribestop'] = 'I don\'t want email copies of posts to this forum';
$string['subscription'] = 'Subscription';
$string['subscriptions'] = 'Subscriptions';
$string['thisforumisthrottled'] = 'This forum has a limit to the number of forum postings you can make in a given time period - this is currently set at $a->blockafter posting(s) in $a->blockperiod';
$string['timestartenderror'] = 'Display end date cannot be earlier than the start date';
$string['trackforum'] = 'Track unread messages';
$string['tracking'] = 'Track';
$string['trackingon'] = 'On';
$string['trackingoff'] = 'Off';
$string['trackingoptional'] = 'Optional';
$string['trackingtype'] = 'Read tracking for this forum?';
$string['unread'] = 'Unread';
$string['unreadposts'] = 'Unread posts';
$string['unreadpostsnumber'] = '$a unread posts';
$string['unreadpostsone'] = '1 unread post';
$string['unsubscribe'] = 'Unsubscribe from this forum';
$string['unsubscribed'] = 'Unsubscribed';
$string['unsubscribeshort'] = 'Unsubscribe';
$string['warnafter'] = 'Post threshold for warning';
$string['yesforever'] = 'Yes, forever';
$string['yesinitially'] = 'Yes, initially';
$string['youratedthis'] = 'You rated this';
$string['yournewtopic'] = 'Your new discussion topic';
$string['yournewquestion'] = 'Your new question';
$string['yourreply'] = 'Your reply';

?>
