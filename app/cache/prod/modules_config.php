<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    3 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
    4 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    6 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    7 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    8 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    9 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
    10 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    11 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    12 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    13 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    14 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    15 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    16 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    17 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    18 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    19 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    20 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    21 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    22 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    23 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    24 => 'Topxia\\Service\\User\\Event\\VipMemberEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
  ),
);