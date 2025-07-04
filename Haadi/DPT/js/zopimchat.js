//basic zopim widget code, from their site
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?8370aa94-d81c-453f-be75-56bf5c5cdbc9';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

//make sure zopim does not show till we know we have department agents
var intial_zopim_hiding_done = false;

//Make sure we only try to do settings once (we get called multiple times)
var intial_zopim_setting_done = false;

console.log("zopim_defer.js is loaded");

$zopim(function()
    {
        console.log("zopim function");

        //only try to use the livechat object if it already exists
        if (typeof($zopim.livechat) == 'object')
        {
            if (!intial_zopim_hiding_done)
            {
                //Before anything, hide everything. We want to make sure the widget only shows if someone is online,
                //and NOT doing this causes the widget to appear and then disapper.
                //Keeping it visible is also a viable option - I include this in case it's needed
                $zopim.livechat.hideAll();
                intial_zopim_hiding_done = true;
                console.log("zopim initially hidden");
            }

            //Tell zopim to give us a call once they are fully initialized
            $zopim.livechat.setOnConnected (function ()
                {
                    if (!intial_zopim_setting_done)
                    {
                        if (typeof($zopim.livechat.departments) == 'object' &&
                            typeof($zopim.livechat.departments.getDepartment('myDepartment')) == 'object') {
                            if ($zopim.livechat.departments.getDepartment('myDepartment').status == 'online') {
                                $zopim.livechat.setLanguage('en');
                                $zopim.livechat.concierge.setName('Live Support');
                                $zopim.livechat.concierge.setTitle('Ask us anything');
                                $zopim.livechat.departments.filter('myDepartment');
                                $zopim.livechat.button.show();
                                console.log(livechat_department + ": Department Online. Lang: " + livechat_language);

                                //I've seen cases where Spain dept was listed offline even though Susana logged in.
                                //therefore, only indicate that we're done setup if dept is listed as online, otherwise
                                //try each time this callback is called.
                                intial_zopim_setting_done = true;
                            } else {
                                $zopim.livechat.hideAll();
                                console.log(livechat_department + ": Department Offline");
                            }
                        }
                    }
                }
            )
        }
    }
);