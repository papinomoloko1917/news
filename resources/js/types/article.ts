export type Article = {
  id: number;
  title: string;
  content: string;
  slug: string;
  views_count: number;
  image: string | null;
  is_featured: boolean;
  published_at: string | null;
  created_at?: string;
  updated_at?: string;
};
