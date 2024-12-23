/**
 * Global registry of core events that can be triggered/listened for.
 *
 * @module     core/event
 * @package    core
 * @class      event
 * @copyright  2015 Damyon Wiese <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      3.0
 */
define("core/event",["jquery","core/yui"],(function($,Y){return{Events:{FORM_FIELD_VALIDATION:"core_form-field-validation"},getLegacyEvents:function(){var result=$.Deferred();return Y.use("event","moodle-core-event",(function(){result.resolve(window.M.core.event)})),result.promise()},notifyFilterContentUpdated:function(nodes){nodes=$(nodes),Y.use("event","moodle-core-event",(function(Y){$(document).trigger(M.core.event.FILTER_CONTENT_UPDATED,[nodes]);var yuiNodes=new Y.NodeList(nodes.get());Y.fire(M.core.event.FILTER_CONTENT_UPDATED,{nodes:yuiNodes})}))},notifyFormSubmitAjax:function(form,skipValidation){skipValidation=skipValidation||!1,Y.use("event","moodle-core-event",(function(Y){skipValidation&&(window.skipClientValidation=!0),$(form).trigger(M.core.event.FORM_SUBMIT_AJAX),Y.one(form).fire(M.core.event.FORM_SUBMIT_AJAX,{currentTarget:Y.one(form)}),skipValidation&&(window.skipClientValidation=!1)}))},notifyEditorContentRestored:function(){Y.use("event","moodle-core-event",(function(Y){$(document).trigger(M.core.event.EDITOR_CONTENT_RESTORED),Y.fire(M.core.event.EDITOR_CONTENT_RESTORED)}))}}}));
