<?php

declare(strict_types=1);

namespace Zanzara\Telegram\Type;

/**
 * This object contains information about one member of a chat.
 *
 * More on https://core.telegram.org/bots/api#chatmember
 */
class ChatMember
{

    /**
     * Information about the user
     *
     * @var User
     */
    private $user;

    /**
     * The member's status in the chat. Can be "creator", "administrator", "member", "restricted", "left" or "kicked"
     *
     * @var string
     */
    private $status;

    /**
     * Optional. Owner and administrators only. Custom title for this user
     *
     * @var string|null
     */
    private $custom_title;

    /**
     * Optional. Owner and administrators only. True, if the user's presence in the chat is hidden
     *
     * @since zanzara 0.5.0, Telegram Bot Api 5.0
     *
     * @var bool|null
     */
    private $is_anonymous;

    /**
     * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @var int|null
     */
    private $until_date;

    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @var bool|null
     */
    private $can_be_edited;

    /**
     * Optional. Administrators only. True, if the administrator can post in the channel; channels only
     *
     * @var bool|null
     */
    private $can_post_messages;

    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages;
     * channels only
     *
     * @var bool|null
     */
    private $can_edit_messages;

    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     *
     * @var bool|null
     */
    private $can_delete_messages;

    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @var bool|null
     */
    private $can_restrict_members;

    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own
     * privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that
     * were appointed by the user)
     *
     * @var bool|null
     */
    private $can_promote_members;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other
     * settings
     *
     * @var bool|null
     */
    private $can_change_info;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     *
     * @var bool|null
     */
    private $can_invite_users;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
     *
     * @var bool|null
     */
    private $can_pin_messages;

    /**
     * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @var bool|null
     */
    private $is_member;

    /**
     * Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @var bool|null
     */
    private $can_send_messages;

    /**
     * Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and
     * voice notes
     *
     * @var bool|null
     */
    private $can_send_media_messages;

    /**
     * Optional. Restricted only. True, if the user is allowed to send polls
     *
     * @var bool|null
     */
    private $can_send_polls;

    /**
     * Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @var bool|null
     */
    private $can_send_other_messages;

    /**
     * Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @var bool|null
     */
    private $can_add_web_page_previews;

    /**
     * Chat the user belongs to
     *
     * @var Chat
     */
    private $chat;

    /**
     * Performer of the action, which resulted in the change.
     *
     * @var User
     */
    private $from;

    /**
     * Date the change was done in Unix time.
     *
     * @var integer
     */
    private $date;

    /**
     * Previous information about the chat member.
     *
     * @var ChatMember
     */
    private $old_chat_member;

    /**
     * New information about the chat member
     *
     * @var ChatMember
     */
    private $new_chat_member;

    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     *
     * @var ChatInviteLink|null
     */
    private $invite_link;

    /**
     * True, if the administrator can manage voice chats
     *
     * @var bool
     */
    private $can_manage_voice_chats;

    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see
     * channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other
     * administrator privilege
     *
     * @var bool
     */
    private $can_manage_chat;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getCustomTitle(): ?string
    {
        return $this->custom_title;
    }

    /**
     * @param string|null $custom_title
     */
    public function setCustomTitle(?string $custom_title): void
    {
        $this->custom_title = $custom_title;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->until_date;
    }

    /**
     * @param int|null $until_date
     */
    public function setUntilDate(?int $until_date): void
    {
        $this->until_date = $until_date;
    }

    /**
     * @return bool|null
     */
    public function getCanBeEdited(): ?bool
    {
        return $this->can_be_edited;
    }

    /**
     * @param bool|null $can_be_edited
     */
    public function setCanBeEdited(?bool $can_be_edited): void
    {
        $this->can_be_edited = $can_be_edited;
    }

    /**
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->can_post_messages;
    }

    /**
     * @param bool|null $can_post_messages
     */
    public function setCanPostMessages(?bool $can_post_messages): void
    {
        $this->can_post_messages = $can_post_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->can_edit_messages;
    }

    /**
     * @param bool|null $can_edit_messages
     */
    public function setCanEditMessages(?bool $can_edit_messages): void
    {
        $this->can_edit_messages = $can_edit_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteMessages(): ?bool
    {
        return $this->can_delete_messages;
    }

    /**
     * @param bool|null $can_delete_messages
     */
    public function setCanDeleteMessages(?bool $can_delete_messages): void
    {
        $this->can_delete_messages = $can_delete_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanRestrictMembers(): ?bool
    {
        return $this->can_restrict_members;
    }

    /**
     * @param bool|null $can_restrict_members
     */
    public function setCanRestrictMembers(?bool $can_restrict_members): void
    {
        $this->can_restrict_members = $can_restrict_members;
    }

    /**
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool
    {
        return $this->can_promote_members;
    }

    /**
     * @param bool|null $can_promote_members
     */
    public function setCanPromoteMembers(?bool $can_promote_members): void
    {
        $this->can_promote_members = $can_promote_members;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->can_change_info;
    }

    /**
     * @param bool|null $can_change_info
     */
    public function setCanChangeInfo(?bool $can_change_info): void
    {
        $this->can_change_info = $can_change_info;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->can_invite_users;
    }

    /**
     * @param bool|null $can_invite_users
     */
    public function setCanInviteUsers(?bool $can_invite_users): void
    {
        $this->can_invite_users = $can_invite_users;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->can_pin_messages;
    }

    /**
     * @param bool|null $can_pin_messages
     */
    public function setCanPinMessages(?bool $can_pin_messages): void
    {
        $this->can_pin_messages = $can_pin_messages;
    }

    /**
     * @return bool|null
     */
    public function getIsMember(): ?bool
    {
        return $this->is_member;
    }

    /**
     * @param bool|null $is_member
     */
    public function setIsMember(?bool $is_member): void
    {
        $this->is_member = $is_member;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->can_send_messages;
    }

    /**
     * @param bool|null $can_send_messages
     */
    public function setCanSendMessages(?bool $can_send_messages): void
    {
        $this->can_send_messages = $can_send_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMediaMessages(): ?bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * @param bool|null $can_send_media_messages
     */
    public function setCanSendMediaMessages(?bool $can_send_media_messages): void
    {
        $this->can_send_media_messages = $can_send_media_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->can_send_polls;
    }

    /**
     * @param bool|null $can_send_polls
     */
    public function setCanSendPolls(?bool $can_send_polls): void
    {
        $this->can_send_polls = $can_send_polls;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * @param bool|null $can_send_other_messages
     */
    public function setCanSendOtherMessages(?bool $can_send_other_messages): void
    {
        $this->can_send_other_messages = $can_send_other_messages;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * @param bool|null $can_add_web_page_previews
     */
    public function setCanAddWebPagePreviews(?bool $can_add_web_page_previews): void
    {
        $this->can_add_web_page_previews = $can_add_web_page_previews;
    }

    /**
     * @return bool|null
     */
    public function getIsAnonymous(): ?bool
    {
        return $this->is_anonymous;
    }

    /**
     * @param bool|null $is_anonymous
     */
    public function setIsAnonymous(?bool $is_anonymous): void
    {
        $this->is_anonymous = $is_anonymous;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     */
    public function setChat(Chat $chat): void
    {
        $this->chat = $chat;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    /**
     * @return ChatMember
     */
    public function getOldChatMember(): ChatMember
    {
        return $this->old_chat_member;
    }

    /**
     * @param ChatMember $old_chat_member
     */
    public function setOldChatMember(ChatMember $old_chat_member): void
    {
        $this->old_chat_member = $old_chat_member;
    }

    /**
     * @return ChatMember
     */
    public function getNewChatMember(): ChatMember
    {
        return $this->new_chat_member;
    }

    /**
     * @param ChatMember $new_chat_member
     */
    public function setNewChatMember(ChatMember $new_chat_member): void
    {
        $this->new_chat_member = $new_chat_member;
    }

    /**
     * @return ChatInviteLink|null
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->invite_link;
    }

    /**
     * @param ChatInviteLink|null $invite_link
     */
    public function setInviteLink(?ChatInviteLink $invite_link): void
    {
        $this->invite_link = $invite_link;
    }

    /**
     * @return bool
     */
    public function isCanManageVoiceChats(): bool
    {
        return $this->can_manage_voice_chats;
    }

    /**
     * @param bool $can_manage_voice_chats
     */
    public function setCanManageVoiceChats(bool $can_manage_voice_chats): void
    {
        $this->can_manage_voice_chats = $can_manage_voice_chats;
    }

    /**
     * @return bool
     */
    public function isCanManageChat(): bool
    {
        return $this->can_manage_chat;
    }

    /**
     * @param bool $can_manage_chat
     */
    public function setCanManageChat(bool $can_manage_chat): void
    {
        $this->can_manage_chat = $can_manage_chat;
    }

}