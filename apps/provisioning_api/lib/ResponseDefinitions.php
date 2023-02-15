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

namespace OCA\Provisioning_API;

/**
 * @psalm-type ProvisioningApiUserDetails = array{
 *     additional_mail: string[],
 *     additional_mailScope: string[]|null,
 *     address: string,
 *     addressScope: string|null,
 *     avatarScope: string|null,
 *     backend: string,
 *     backendCapabilities: array{
 *         setDisplayName: bool,
 *         setPassword: bool
 *     },
 *     biography: string,
 *     biographyScope: string|null,
 *     displayname: string,
 *     display-name: string,
 *     displaynameScope: string|null,
 *     email: string|null,
 *     emailScope: string|null,
 *     enabled: bool|null,
 *     fediverse: string|null,
 *     fediverseScope: string|null,
 *     groups: string[],
 *     headline: string,
 *     headlineScope: string|null,
 *     id: string,
 *     language: string,
 *     lastLogin: int,
 *     locale: string,
 *     notify_email: string|null,
 *     organisation: string,
 *     organisationScope: string|null,
 *     phone: string,
 *     phoneScope: string|null,
 *     profile_enabled: string,
 *     profile_enabledScope: string|null,
 *     quota: array{
 *         free: int|null,
 *         quota: string|int|bool,
 *         relative: float|null,
 *         total: int|null,
 *         used: int,
 *       },
 *     role: string,
 *     roleScope: string|null,
 *     storageLocation: string|null,
 *     subadmin: string[],
 *     twitter: string,
 *     twitterScope: string|null,
 *     website: string,
 *     websiteScope: string|null,
 * }
 *
 * @psalm-type ProvisioningApiAppInfoValue = string|string[]|object
 *
 * @psalm-type ProvisioningApiAppInfo = array{
 *     active: bool|null,
 *     activity: ProvisioningApiAppInfoValue|null,
 *     author: ProvisioningApiAppInfoValue|null,
 *     background-jobs: ProvisioningApiAppInfoValue|null,
 *     bugs: ProvisioningApiAppInfoValue|null,
 *     category: ProvisioningApiAppInfoValue|null,
 *     collaboration: ProvisioningApiAppInfoValue|null,
 *     commands: ProvisioningApiAppInfoValue|null,
 *     default_enable: ProvisioningApiAppInfoValue|null,
 *     dependencies: ProvisioningApiAppInfoValue|null,
 *     description: string,
 *     discussion: ProvisioningApiAppInfoValue|null,
 *     documentation: ProvisioningApiAppInfoValue|null,
 *     groups: ProvisioningApiAppInfoValue|null,
 *     id: string,
 *     info: ProvisioningApiAppInfoValue|null,
 *     internal: bool|null,
 *     level: int|null,
 *     licence: ProvisioningApiAppInfoValue|null,
 *     name: string,
 *     namespace: ProvisioningApiAppInfoValue|null,
 *     navigations: ProvisioningApiAppInfoValue|null,
 *     preview: ProvisioningApiAppInfoValue|null,
 *     previewAsIcon: bool|null,
 *     public: ProvisioningApiAppInfoValue|null,
 *     remote: ProvisioningApiAppInfoValue|null,
 *     removable: bool|null,
 *     repair-steps: ProvisioningApiAppInfoValue|null,
 *     repository: ProvisioningApiAppInfoValue|null,
 *     sabre: ProvisioningApiAppInfoValue|null,
 *     screenshot: ProvisioningApiAppInfoValue|null,
 *     settings: ProvisioningApiAppInfoValue|null,
 *     summary: string,
 *     trash: ProvisioningApiAppInfoValue|null,
 *     two-factor-providers: ProvisioningApiAppInfoValue|null,
 *     types: ProvisioningApiAppInfoValue|null,
 *     version: string,
 *     versions: ProvisioningApiAppInfoValue|null,
 *     website: ProvisioningApiAppInfoValue|null,
 * }
 *
 * @psalm-type ProvisioningApiGroupDetails = array{
 *     id: string,
 *     displayname: string,
 *     usercount: bool|int,
 *     disabled: bool|int,
 *     canAdd: bool,
 *     canRemove: bool,
 * }
 */
class ResponseDefinitions {
}
