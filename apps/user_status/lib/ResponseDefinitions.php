<?php
declare(strict_types=1);

/**
 * @copyright Copyright (c) 2023 Kate Döen <kate.doeen@nextcloud.com>
 *
 * @author Kate Döen <kate.doeen@nextcloud.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\UserStatus;

/**
 * @psalm-type UserStatusClearAtType = "period"|"end-of"
 *
 * @psalm-type UserStatusClearAtTime = "day"|"week"
 *
 * @psalm-type UserStatusClearAt = array{
 *     type: UserStatusClearAtType,
 *     time: UserStatusClearAtTime|int,
 * }
 *
 * @psalm-type UserStatusType = "online"|"offline"|"dnd"|"away"|"invisible"
 *
 * @psalm-type UserStatusPredefined = array{
 *     id: string,
 *     icon: string,
 *     message: string,
 *     clearAt: UserStatusClearAt|null,
 *     visible: bool|null,
 * }
 *
 * @psalm-type UserStatusPublic = array{
 *     userId: string,
 *     message: string|null,
 *     icon: string|null,
 *     clearAt: int|UserStatusClearAt|null,
 *     status: UserStatusType,
 * }
 *
 * @psalm-type UserStatusPrivate = UserStatusPublic&array{
 *     messageId: string|null,
 *     messageIsPredefined: bool,
 *     statusIsUserDefined: bool,
 * }
 */
class ResponseDefinitions {
}
