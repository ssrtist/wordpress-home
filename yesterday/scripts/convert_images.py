from PIL import Image
from pathlib import Path

PROJECT_ROOT = Path(__file__).resolve().parent.parent
IMAGES_DIR = PROJECT_ROOT / 'images'

def convert_png_to_jpg(p: Path, quality=90):
    try:
        with Image.open(p) as im:
            # Convert RGBA to RGB with white background if needed
            if im.mode in ('RGBA', 'LA'):
                bg = Image.new('RGB', im.size, (255, 255, 255))
                bg.paste(im, mask=im.split()[-1])
                out = bg
            else:
                out = im.convert('RGB')
            out_path = p.with_suffix('.jpg')
            out.save(out_path, 'JPEG', quality=quality)
            print(f'Created: {out_path.name}')
    except Exception as e:
        print(f'Failed: {p.name} -> {e}')


def main():
    # gather png files from images/ and the project root (but not inside subfolders)
    pngs = []
    if IMAGES_DIR.exists():
        pngs.extend([p for p in IMAGES_DIR.iterdir() if p.suffix.lower() == '.png'])

    # include PNGs in project root (excluding .venv and scripts folders)
    for p in PROJECT_ROOT.iterdir():
        if p.is_file() and p.suffix.lower() == '.png':
            pngs.append(p)

    pngs = sorted(pngs)
    if not pngs:
        print('No PNG files found to convert.')
        return
    for p in pngs:
        jpg = p.with_suffix('.jpg')
        if jpg.exists():
            print(f'Skipping existing: {jpg.name}')
            continue
        convert_png_to_jpg(p)

if __name__ == '__main__':
    main()
