<?php
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
 *
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @author Lukas Reschke <lukas@statuscode.ch>
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
namespace OCA\DAV\Tests\unit;

use OC\Files\ObjectStore\ObjectStoreStorage;
use OC\Files\ObjectStore\S3;
use OCA\DAV\Capabilities;
use OCP\IConfig;
use OCP\Files\Folder;
use OCP\Files\IRootFolder;
use OCP\Files\Storage\IStorage;
use Test\TestCase;

/**
 * @package OCA\DAV\Tests\unit
 */
class CapabilitiesTest extends TestCase {
	public function testGetCapabilities(): void {
		$config = $this->createMock(IConfig::class);
		$config->expects($this->once())
			->method('getSystemValueBool')
			->with('bulkupload.enabled', $this->isType('bool'))
			->willReturn(false);
		$capabilities = new Capabilities($config);

		$storage = $this->createMock(IStorage::class);
		$folder = $this->createMock(Folder::class);
		$rootFolder = $this->createMock(IRootFolder::class);
		$rootFolder->method('get')->willReturn($folder);
		$folder->method('getStorage')->willReturn($storage);
		$capabilities = new Capabilities($rootFolder);
		$expected = [
			'dav' => [
				'chunking' => '1.0',
				's3-multipart' => false,
			],
		];
		$this->assertSame($expected, $capabilities->getCapabilities());
	}

	public function testGetCapabilitiesS3() {
		$objectStore = $this->createMock(S3::class);
		$storage = $this->createMock(ObjectStoreStorage::class);
		$folder = $this->createMock(Folder::class);
		$rootFolder = $this->createMock(IRootFolder::class);
		$rootFolder->method('get')->willReturn($folder);
		$folder->method('getStorage')->willReturn($storage);
		$storage->method('instanceOfStorage')->willReturn(true);
		$storage->method('getObjectStore')->willReturn($objectStore);
		$capabilities = new Capabilities($rootFolder);
		$expected = [
			'dav' => [
				'chunking' => '1.0',
				's3-multipart' => true,
			],
		];
		$this->assertSame($expected, $capabilities->getCapabilities());
	}

	public function testGetCapabilitiesWithBulkUpload(): void {
		$config = $this->createMock(IConfig::class);
		$config->expects($this->once())
			->method('getSystemValueBool')
			->with('bulkupload.enabled', $this->isType('bool'))
			->willReturn(true);
		$capabilities = new Capabilities($config);
		$expected = [
			'dav' => [
				'chunking' => '1.0',
				's3-multipart' => true,
				'bulkupload' => '1.0',
			],
		];
		$this->assertSame($expected, $capabilities->getCapabilities());
	}
}
